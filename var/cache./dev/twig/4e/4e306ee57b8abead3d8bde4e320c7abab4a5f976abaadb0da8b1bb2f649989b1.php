<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a25b46855827440367e0f0105bb14a61dc2861dfd26beeba5f9012f98740eea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb31648ae22c013adfb78366e5f6eddf84ffa76a98f52ac00a292fb19f5e57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb31648ae22c013adfb78366e5f6eddf84ffa76a98f52ac00a292fb19f5e57c->enter($__internal_3bb31648ae22c013adfb78366e5f6eddf84ffa76a98f52ac00a292fb19f5e57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_441314415a5a47a5c5a652a0a09179329539d13ef5162fdccbbbfb383674285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441314415a5a47a5c5a652a0a09179329539d13ef5162fdccbbbfb383674285b->enter($__internal_441314415a5a47a5c5a652a0a09179329539d13ef5162fdccbbbfb383674285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb31648ae22c013adfb78366e5f6eddf84ffa76a98f52ac00a292fb19f5e57c->leave($__internal_3bb31648ae22c013adfb78366e5f6eddf84ffa76a98f52ac00a292fb19f5e57c_prof);

        
        $__internal_441314415a5a47a5c5a652a0a09179329539d13ef5162fdccbbbfb383674285b->leave($__internal_441314415a5a47a5c5a652a0a09179329539d13ef5162fdccbbbfb383674285b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1964c085dc1370c47c8302c6d7d7c34dfb0c984f6a6984d0793a87b600fe5c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1964c085dc1370c47c8302c6d7d7c34dfb0c984f6a6984d0793a87b600fe5c72->enter($__internal_1964c085dc1370c47c8302c6d7d7c34dfb0c984f6a6984d0793a87b600fe5c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d757a36ed71468ee634bcd5734d7e2063448947efd7add51296d96f70605dd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d757a36ed71468ee634bcd5734d7e2063448947efd7add51296d96f70605dd17->enter($__internal_d757a36ed71468ee634bcd5734d7e2063448947efd7add51296d96f70605dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d757a36ed71468ee634bcd5734d7e2063448947efd7add51296d96f70605dd17->leave($__internal_d757a36ed71468ee634bcd5734d7e2063448947efd7add51296d96f70605dd17_prof);

        
        $__internal_1964c085dc1370c47c8302c6d7d7c34dfb0c984f6a6984d0793a87b600fe5c72->leave($__internal_1964c085dc1370c47c8302c6d7d7c34dfb0c984f6a6984d0793a87b600fe5c72_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f373007fcf170fbe50e389445ee8539203a279deee2a8bd700bc49955b4f1b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f373007fcf170fbe50e389445ee8539203a279deee2a8bd700bc49955b4f1b1e->enter($__internal_f373007fcf170fbe50e389445ee8539203a279deee2a8bd700bc49955b4f1b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8130a240f2977d11507db69deb956318d0bc0cb0cf61b7f1303515d0df76bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8130a240f2977d11507db69deb956318d0bc0cb0cf61b7f1303515d0df76bb4->enter($__internal_d8130a240f2977d11507db69deb956318d0bc0cb0cf61b7f1303515d0df76bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d8130a240f2977d11507db69deb956318d0bc0cb0cf61b7f1303515d0df76bb4->leave($__internal_d8130a240f2977d11507db69deb956318d0bc0cb0cf61b7f1303515d0df76bb4_prof);

        
        $__internal_f373007fcf170fbe50e389445ee8539203a279deee2a8bd700bc49955b4f1b1e->leave($__internal_f373007fcf170fbe50e389445ee8539203a279deee2a8bd700bc49955b4f1b1e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_852651ac1708dd01cd7f5a4821aa6eb7839d1885ec3dae57b233fe07fde7304c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852651ac1708dd01cd7f5a4821aa6eb7839d1885ec3dae57b233fe07fde7304c->enter($__internal_852651ac1708dd01cd7f5a4821aa6eb7839d1885ec3dae57b233fe07fde7304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32612934426add76ad3c756b997ea3d89b51e3aa9a9d7ea4515017600f2feb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32612934426add76ad3c756b997ea3d89b51e3aa9a9d7ea4515017600f2feb30->enter($__internal_32612934426add76ad3c756b997ea3d89b51e3aa9a9d7ea4515017600f2feb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_32612934426add76ad3c756b997ea3d89b51e3aa9a9d7ea4515017600f2feb30->leave($__internal_32612934426add76ad3c756b997ea3d89b51e3aa9a9d7ea4515017600f2feb30_prof);

        
        $__internal_852651ac1708dd01cd7f5a4821aa6eb7839d1885ec3dae57b233fe07fde7304c->leave($__internal_852651ac1708dd01cd7f5a4821aa6eb7839d1885ec3dae57b233fe07fde7304c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
