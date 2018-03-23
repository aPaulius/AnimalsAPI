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
        $__internal_6b07b5a6b82cf86e04d34b076764d04eeeb6457fec9edf6268b7c14b99edcb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b07b5a6b82cf86e04d34b076764d04eeeb6457fec9edf6268b7c14b99edcb23->enter($__internal_6b07b5a6b82cf86e04d34b076764d04eeeb6457fec9edf6268b7c14b99edcb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1aa8cedc2b5960cc14b96b96e4a1d17d4d75d07d126fddbf142aed60d19085b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa8cedc2b5960cc14b96b96e4a1d17d4d75d07d126fddbf142aed60d19085b9->enter($__internal_1aa8cedc2b5960cc14b96b96e4a1d17d4d75d07d126fddbf142aed60d19085b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b07b5a6b82cf86e04d34b076764d04eeeb6457fec9edf6268b7c14b99edcb23->leave($__internal_6b07b5a6b82cf86e04d34b076764d04eeeb6457fec9edf6268b7c14b99edcb23_prof);

        
        $__internal_1aa8cedc2b5960cc14b96b96e4a1d17d4d75d07d126fddbf142aed60d19085b9->leave($__internal_1aa8cedc2b5960cc14b96b96e4a1d17d4d75d07d126fddbf142aed60d19085b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4af73141dbf4d034d3949d6ce5e83592edd379b70e66a346f24a699a6ce9a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4af73141dbf4d034d3949d6ce5e83592edd379b70e66a346f24a699a6ce9a72->enter($__internal_b4af73141dbf4d034d3949d6ce5e83592edd379b70e66a346f24a699a6ce9a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_208fc613ec551172816a2fb128852b7bb7ff88f378a9dfec3fc44b84e3911211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208fc613ec551172816a2fb128852b7bb7ff88f378a9dfec3fc44b84e3911211->enter($__internal_208fc613ec551172816a2fb128852b7bb7ff88f378a9dfec3fc44b84e3911211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_208fc613ec551172816a2fb128852b7bb7ff88f378a9dfec3fc44b84e3911211->leave($__internal_208fc613ec551172816a2fb128852b7bb7ff88f378a9dfec3fc44b84e3911211_prof);

        
        $__internal_b4af73141dbf4d034d3949d6ce5e83592edd379b70e66a346f24a699a6ce9a72->leave($__internal_b4af73141dbf4d034d3949d6ce5e83592edd379b70e66a346f24a699a6ce9a72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88642f81d9e85a1f24fd49e11298b6e6318ec21ef9309da899ad9e85054d0a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88642f81d9e85a1f24fd49e11298b6e6318ec21ef9309da899ad9e85054d0a68->enter($__internal_88642f81d9e85a1f24fd49e11298b6e6318ec21ef9309da899ad9e85054d0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ebc3a26623f36496c71226de1d7d5e1457502473c83e03335de98311820d558d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc3a26623f36496c71226de1d7d5e1457502473c83e03335de98311820d558d->enter($__internal_ebc3a26623f36496c71226de1d7d5e1457502473c83e03335de98311820d558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebc3a26623f36496c71226de1d7d5e1457502473c83e03335de98311820d558d->leave($__internal_ebc3a26623f36496c71226de1d7d5e1457502473c83e03335de98311820d558d_prof);

        
        $__internal_88642f81d9e85a1f24fd49e11298b6e6318ec21ef9309da899ad9e85054d0a68->leave($__internal_88642f81d9e85a1f24fd49e11298b6e6318ec21ef9309da899ad9e85054d0a68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_afa8f12ed6101cbf059d322d28338f7462e97d3bc0db76af332482f800452f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa8f12ed6101cbf059d322d28338f7462e97d3bc0db76af332482f800452f75->enter($__internal_afa8f12ed6101cbf059d322d28338f7462e97d3bc0db76af332482f800452f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec05ed4093def5a2f2feaf5fae9eb1b65e01d31b277957165b52391d3c2026ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec05ed4093def5a2f2feaf5fae9eb1b65e01d31b277957165b52391d3c2026ab->enter($__internal_ec05ed4093def5a2f2feaf5fae9eb1b65e01d31b277957165b52391d3c2026ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec05ed4093def5a2f2feaf5fae9eb1b65e01d31b277957165b52391d3c2026ab->leave($__internal_ec05ed4093def5a2f2feaf5fae9eb1b65e01d31b277957165b52391d3c2026ab_prof);

        
        $__internal_afa8f12ed6101cbf059d322d28338f7462e97d3bc0db76af332482f800452f75->leave($__internal_afa8f12ed6101cbf059d322d28338f7462e97d3bc0db76af332482f800452f75_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
