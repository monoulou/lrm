<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_a52b628bb5ea25bdc676b2576e1dc90c7386e630573077a38c44f1e61c181f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06fe36a5c661a83c227d0d65c509ae06509318f1e2c55aedaa5a5dbf68c4539e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fe36a5c661a83c227d0d65c509ae06509318f1e2c55aedaa5a5dbf68c4539e->enter($__internal_06fe36a5c661a83c227d0d65c509ae06509318f1e2c55aedaa5a5dbf68c4539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06fe36a5c661a83c227d0d65c509ae06509318f1e2c55aedaa5a5dbf68c4539e->leave($__internal_06fe36a5c661a83c227d0d65c509ae06509318f1e2c55aedaa5a5dbf68c4539e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_52886f94d24dd8b083b77dc504b9422e834a4c98ae443dcc10464a1c486b1488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52886f94d24dd8b083b77dc504b9422e834a4c98ae443dcc10464a1c486b1488->enter($__internal_52886f94d24dd8b083b77dc504b9422e834a4c98ae443dcc10464a1c486b1488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_52886f94d24dd8b083b77dc504b9422e834a4c98ae443dcc10464a1c486b1488->leave($__internal_52886f94d24dd8b083b77dc504b9422e834a4c98ae443dcc10464a1c486b1488_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4800bc39f43f9531fa8276ea01eb364e79d50d5bb6cb495c5868c6956d3aa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4800bc39f43f9531fa8276ea01eb364e79d50d5bb6cb495c5868c6956d3aa6b->enter($__internal_f4800bc39f43f9531fa8276ea01eb364e79d50d5bb6cb495c5868c6956d3aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_f4800bc39f43f9531fa8276ea01eb364e79d50d5bb6cb495c5868c6956d3aa6b->leave($__internal_f4800bc39f43f9531fa8276ea01eb364e79d50d5bb6cb495c5868c6956d3aa6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  93 => 22,  85 => 24,  82 => 22,  77 => 18,  71 => 17,  62 => 14,  57 => 13,  52 => 12,  48 => 11,  43 => 8,  41 => 7,  35 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
