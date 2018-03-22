<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2950bea4225de28d1ece9a268b19848d17155a6cb7931f11adc0c7ac05bd6c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_afb8f7f306fa8addd5448474c07a67497fca7970e552daa9ba17851335f971b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb8f7f306fa8addd5448474c07a67497fca7970e552daa9ba17851335f971b3->enter($__internal_afb8f7f306fa8addd5448474c07a67497fca7970e552daa9ba17851335f971b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a508280cb49e05338025e7b7fac110f57fcbba6fd0f1671594c04a83122add1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a508280cb49e05338025e7b7fac110f57fcbba6fd0f1671594c04a83122add1f->enter($__internal_a508280cb49e05338025e7b7fac110f57fcbba6fd0f1671594c04a83122add1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb8f7f306fa8addd5448474c07a67497fca7970e552daa9ba17851335f971b3->leave($__internal_afb8f7f306fa8addd5448474c07a67497fca7970e552daa9ba17851335f971b3_prof);

        
        $__internal_a508280cb49e05338025e7b7fac110f57fcbba6fd0f1671594c04a83122add1f->leave($__internal_a508280cb49e05338025e7b7fac110f57fcbba6fd0f1671594c04a83122add1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef2cee7ff7f6bc1ffed9f2a1c239002647f88d4df62bff2bcc7b3e6001d8bc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2cee7ff7f6bc1ffed9f2a1c239002647f88d4df62bff2bcc7b3e6001d8bc23->enter($__internal_ef2cee7ff7f6bc1ffed9f2a1c239002647f88d4df62bff2bcc7b3e6001d8bc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a9edf85a5700123272a7d524abb71f717da66cebe886ab92b3ea5742189893b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9edf85a5700123272a7d524abb71f717da66cebe886ab92b3ea5742189893b->enter($__internal_2a9edf85a5700123272a7d524abb71f717da66cebe886ab92b3ea5742189893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a9edf85a5700123272a7d524abb71f717da66cebe886ab92b3ea5742189893b->leave($__internal_2a9edf85a5700123272a7d524abb71f717da66cebe886ab92b3ea5742189893b_prof);

        
        $__internal_ef2cee7ff7f6bc1ffed9f2a1c239002647f88d4df62bff2bcc7b3e6001d8bc23->leave($__internal_ef2cee7ff7f6bc1ffed9f2a1c239002647f88d4df62bff2bcc7b3e6001d8bc23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1f5d7481119b5462444ec002d3063e810541da411f9e356df7315e45b6f4311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f5d7481119b5462444ec002d3063e810541da411f9e356df7315e45b6f4311->enter($__internal_e1f5d7481119b5462444ec002d3063e810541da411f9e356df7315e45b6f4311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_551f4f4058eceb5d76947bbaa952e1acb41103833d19fa4f3a32e9c48e31c558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551f4f4058eceb5d76947bbaa952e1acb41103833d19fa4f3a32e9c48e31c558->enter($__internal_551f4f4058eceb5d76947bbaa952e1acb41103833d19fa4f3a32e9c48e31c558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_551f4f4058eceb5d76947bbaa952e1acb41103833d19fa4f3a32e9c48e31c558->leave($__internal_551f4f4058eceb5d76947bbaa952e1acb41103833d19fa4f3a32e9c48e31c558_prof);

        
        $__internal_e1f5d7481119b5462444ec002d3063e810541da411f9e356df7315e45b6f4311->leave($__internal_e1f5d7481119b5462444ec002d3063e810541da411f9e356df7315e45b6f4311_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d24f72f78720cbca77a3191bfd433e8984a814d0a64c529bc867e6b99d47894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d24f72f78720cbca77a3191bfd433e8984a814d0a64c529bc867e6b99d47894->enter($__internal_2d24f72f78720cbca77a3191bfd433e8984a814d0a64c529bc867e6b99d47894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f756b8931469a8582171ccad02ea7026c49f343c1341273f1f4b32a460e8148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f756b8931469a8582171ccad02ea7026c49f343c1341273f1f4b32a460e8148->enter($__internal_4f756b8931469a8582171ccad02ea7026c49f343c1341273f1f4b32a460e8148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f756b8931469a8582171ccad02ea7026c49f343c1341273f1f4b32a460e8148->leave($__internal_4f756b8931469a8582171ccad02ea7026c49f343c1341273f1f4b32a460e8148_prof);

        
        $__internal_2d24f72f78720cbca77a3191bfd433e8984a814d0a64c529bc867e6b99d47894->leave($__internal_2d24f72f78720cbca77a3191bfd433e8984a814d0a64c529bc867e6b99d47894_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/paulius/Projects/web_services_rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
