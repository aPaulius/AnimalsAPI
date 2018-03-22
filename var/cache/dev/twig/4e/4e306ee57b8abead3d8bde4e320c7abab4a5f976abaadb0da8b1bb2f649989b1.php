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
        $__internal_81661cb2e11626b0cb635ef4d512f0734cd1dd86a69646de17ddfaaeea7c4260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81661cb2e11626b0cb635ef4d512f0734cd1dd86a69646de17ddfaaeea7c4260->enter($__internal_81661cb2e11626b0cb635ef4d512f0734cd1dd86a69646de17ddfaaeea7c4260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_12f26936eb02a1739b067b80b16c8cb87341863deb67fe3ced2e60200d23e152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f26936eb02a1739b067b80b16c8cb87341863deb67fe3ced2e60200d23e152->enter($__internal_12f26936eb02a1739b067b80b16c8cb87341863deb67fe3ced2e60200d23e152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81661cb2e11626b0cb635ef4d512f0734cd1dd86a69646de17ddfaaeea7c4260->leave($__internal_81661cb2e11626b0cb635ef4d512f0734cd1dd86a69646de17ddfaaeea7c4260_prof);

        
        $__internal_12f26936eb02a1739b067b80b16c8cb87341863deb67fe3ced2e60200d23e152->leave($__internal_12f26936eb02a1739b067b80b16c8cb87341863deb67fe3ced2e60200d23e152_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40a69719d8d0b57e049eddd2ea9573a2d4c9cf8607ccf7be212ee73fb69429f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a69719d8d0b57e049eddd2ea9573a2d4c9cf8607ccf7be212ee73fb69429f6->enter($__internal_40a69719d8d0b57e049eddd2ea9573a2d4c9cf8607ccf7be212ee73fb69429f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_354b52eaeb89883b470a29b0815f5a6b3cbca4c46eadc61916fbe199a1db4037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354b52eaeb89883b470a29b0815f5a6b3cbca4c46eadc61916fbe199a1db4037->enter($__internal_354b52eaeb89883b470a29b0815f5a6b3cbca4c46eadc61916fbe199a1db4037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_354b52eaeb89883b470a29b0815f5a6b3cbca4c46eadc61916fbe199a1db4037->leave($__internal_354b52eaeb89883b470a29b0815f5a6b3cbca4c46eadc61916fbe199a1db4037_prof);

        
        $__internal_40a69719d8d0b57e049eddd2ea9573a2d4c9cf8607ccf7be212ee73fb69429f6->leave($__internal_40a69719d8d0b57e049eddd2ea9573a2d4c9cf8607ccf7be212ee73fb69429f6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03835d982856fd75b3199268114297b81c58db97fb3244640a0c038977d9ee6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03835d982856fd75b3199268114297b81c58db97fb3244640a0c038977d9ee6e->enter($__internal_03835d982856fd75b3199268114297b81c58db97fb3244640a0c038977d9ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d6dcf5c9831a4ebb117c6e366cb071e2443e003da0abed2eb9658c80076c9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6dcf5c9831a4ebb117c6e366cb071e2443e003da0abed2eb9658c80076c9c0->enter($__internal_2d6dcf5c9831a4ebb117c6e366cb071e2443e003da0abed2eb9658c80076c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d6dcf5c9831a4ebb117c6e366cb071e2443e003da0abed2eb9658c80076c9c0->leave($__internal_2d6dcf5c9831a4ebb117c6e366cb071e2443e003da0abed2eb9658c80076c9c0_prof);

        
        $__internal_03835d982856fd75b3199268114297b81c58db97fb3244640a0c038977d9ee6e->leave($__internal_03835d982856fd75b3199268114297b81c58db97fb3244640a0c038977d9ee6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_729b0fafb6af73aacf29b211f13b86562cb1b8a33b302bfa1a22808148cc8fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729b0fafb6af73aacf29b211f13b86562cb1b8a33b302bfa1a22808148cc8fa1->enter($__internal_729b0fafb6af73aacf29b211f13b86562cb1b8a33b302bfa1a22808148cc8fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e601a75429fb4c7227c110e9f305e8fb73e5964820d081058f7286d649c70bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e601a75429fb4c7227c110e9f305e8fb73e5964820d081058f7286d649c70bb->enter($__internal_1e601a75429fb4c7227c110e9f305e8fb73e5964820d081058f7286d649c70bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1e601a75429fb4c7227c110e9f305e8fb73e5964820d081058f7286d649c70bb->leave($__internal_1e601a75429fb4c7227c110e9f305e8fb73e5964820d081058f7286d649c70bb_prof);

        
        $__internal_729b0fafb6af73aacf29b211f13b86562cb1b8a33b302bfa1a22808148cc8fa1->leave($__internal_729b0fafb6af73aacf29b211f13b86562cb1b8a33b302bfa1a22808148cc8fa1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/paulius/Projects/web_services_rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
