<?php

/* MAUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e71b46e6ba830825032171ef76ef4857a0e0bb57dfb8e2d0b5018da178ad0289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76caf1933a5d6632ba901bbb9144cbf889449524c11295398ba277fbe74a920e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76caf1933a5d6632ba901bbb9144cbf889449524c11295398ba277fbe74a920e->enter($__internal_76caf1933a5d6632ba901bbb9144cbf889449524c11295398ba277fbe74a920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $__internal_d629aa8d1abec377114700b419d5293e8c7df262e17ca7b7f35deebb3b1a25b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d629aa8d1abec377114700b419d5293e8c7df262e17ca7b7f35deebb3b1a25b6->enter($__internal_d629aa8d1abec377114700b419d5293e8c7df262e17ca7b7f35deebb3b1a25b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76caf1933a5d6632ba901bbb9144cbf889449524c11295398ba277fbe74a920e->leave($__internal_76caf1933a5d6632ba901bbb9144cbf889449524c11295398ba277fbe74a920e_prof);

        
        $__internal_d629aa8d1abec377114700b419d5293e8c7df262e17ca7b7f35deebb3b1a25b6->leave($__internal_d629aa8d1abec377114700b419d5293e8c7df262e17ca7b7f35deebb3b1a25b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40daf46c793b43b082b9f56e753e6f04d20d3a530d27015e44a0aa4a144a00b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40daf46c793b43b082b9f56e753e6f04d20d3a530d27015e44a0aa4a144a00b0->enter($__internal_40daf46c793b43b082b9f56e753e6f04d20d3a530d27015e44a0aa4a144a00b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48cda791081c724851c72351e416c98c2c6b6843779e1215f8d7c8a8edd6ee3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cda791081c724851c72351e416c98c2c6b6843779e1215f8d7c8a8edd6ee3a->enter($__internal_48cda791081c724851c72351e416c98c2c6b6843779e1215f8d7c8a8edd6ee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "MAUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_48cda791081c724851c72351e416c98c2c6b6843779e1215f8d7c8a8edd6ee3a->leave($__internal_48cda791081c724851c72351e416c98c2c6b6843779e1215f8d7c8a8edd6ee3a_prof);

        
        $__internal_40daf46c793b43b082b9f56e753e6f04d20d3a530d27015e44a0aa4a144a00b0->leave($__internal_40daf46c793b43b082b9f56e753e6f04d20d3a530d27015e44a0aa4a144a00b0_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
