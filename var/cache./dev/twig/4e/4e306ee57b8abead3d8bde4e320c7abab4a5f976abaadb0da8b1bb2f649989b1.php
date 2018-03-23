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
        $__internal_f5a642058a6c414b85e2ce0beed254e6230e45c779f4853cc192f81f657c89b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a642058a6c414b85e2ce0beed254e6230e45c779f4853cc192f81f657c89b9->enter($__internal_f5a642058a6c414b85e2ce0beed254e6230e45c779f4853cc192f81f657c89b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bc91a82d4e1ebb92cf065a1aa0f2414ea3916d3985579f8e40436e7128f03ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc91a82d4e1ebb92cf065a1aa0f2414ea3916d3985579f8e40436e7128f03ced->enter($__internal_bc91a82d4e1ebb92cf065a1aa0f2414ea3916d3985579f8e40436e7128f03ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a642058a6c414b85e2ce0beed254e6230e45c779f4853cc192f81f657c89b9->leave($__internal_f5a642058a6c414b85e2ce0beed254e6230e45c779f4853cc192f81f657c89b9_prof);

        
        $__internal_bc91a82d4e1ebb92cf065a1aa0f2414ea3916d3985579f8e40436e7128f03ced->leave($__internal_bc91a82d4e1ebb92cf065a1aa0f2414ea3916d3985579f8e40436e7128f03ced_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33c82594b3fb7e62a3e08774885a1919f3b02b345068c9f3b3bda89490a3cad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c82594b3fb7e62a3e08774885a1919f3b02b345068c9f3b3bda89490a3cad5->enter($__internal_33c82594b3fb7e62a3e08774885a1919f3b02b345068c9f3b3bda89490a3cad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f3e74759969349f627bd46c556cf8c07a12b1944f41319aaf216639ca850944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3e74759969349f627bd46c556cf8c07a12b1944f41319aaf216639ca850944->enter($__internal_2f3e74759969349f627bd46c556cf8c07a12b1944f41319aaf216639ca850944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f3e74759969349f627bd46c556cf8c07a12b1944f41319aaf216639ca850944->leave($__internal_2f3e74759969349f627bd46c556cf8c07a12b1944f41319aaf216639ca850944_prof);

        
        $__internal_33c82594b3fb7e62a3e08774885a1919f3b02b345068c9f3b3bda89490a3cad5->leave($__internal_33c82594b3fb7e62a3e08774885a1919f3b02b345068c9f3b3bda89490a3cad5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddf8ec503e4815456f07160d54f4d232f930116328c4e3252fd3366ef715e45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf8ec503e4815456f07160d54f4d232f930116328c4e3252fd3366ef715e45c->enter($__internal_ddf8ec503e4815456f07160d54f4d232f930116328c4e3252fd3366ef715e45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63211ee6876936e53d2acd52aa3a431f4d19872ca554d0deef9802789d95f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63211ee6876936e53d2acd52aa3a431f4d19872ca554d0deef9802789d95f0d0->enter($__internal_63211ee6876936e53d2acd52aa3a431f4d19872ca554d0deef9802789d95f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_63211ee6876936e53d2acd52aa3a431f4d19872ca554d0deef9802789d95f0d0->leave($__internal_63211ee6876936e53d2acd52aa3a431f4d19872ca554d0deef9802789d95f0d0_prof);

        
        $__internal_ddf8ec503e4815456f07160d54f4d232f930116328c4e3252fd3366ef715e45c->leave($__internal_ddf8ec503e4815456f07160d54f4d232f930116328c4e3252fd3366ef715e45c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6143e9abf0f4f716332022f0e49e5adcda18755ee43fca62d4d2465920dae90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6143e9abf0f4f716332022f0e49e5adcda18755ee43fca62d4d2465920dae90b->enter($__internal_6143e9abf0f4f716332022f0e49e5adcda18755ee43fca62d4d2465920dae90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbbbecc178409917e9e678ce13bb228c11885bcc08f2ae2f7a3406a1de7f628f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbbecc178409917e9e678ce13bb228c11885bcc08f2ae2f7a3406a1de7f628f->enter($__internal_cbbbecc178409917e9e678ce13bb228c11885bcc08f2ae2f7a3406a1de7f628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cbbbecc178409917e9e678ce13bb228c11885bcc08f2ae2f7a3406a1de7f628f->leave($__internal_cbbbecc178409917e9e678ce13bb228c11885bcc08f2ae2f7a3406a1de7f628f_prof);

        
        $__internal_6143e9abf0f4f716332022f0e49e5adcda18755ee43fca62d4d2465920dae90b->leave($__internal_6143e9abf0f4f716332022f0e49e5adcda18755ee43fca62d4d2465920dae90b_prof);

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
